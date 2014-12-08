json.array!(@posts) do |post|
  json.extract! post, :id, :title, :image, :content, :source, :author_id
  json.url post_url(post, format: :json)
end
